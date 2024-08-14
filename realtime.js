import express from "express";
import { createServer } from "http";
import { Server as SocketIOServer } from "socket.io";

const app = express();
const server = createServer(app);
const io = new SocketIOServer(server, {
    cors: {
        origin: "*", // You can restrict this to your frontend URL
        methods: ["GET", "POST"],
    }
});

server.listen(3000, () => {
    console.log("Server is listening on port 3000");
});

io.on("connection", (socket) => {
    console.log(`User connected: ${socket.id}`);

    socket.on("conversation", (conversation) => {
        console.log(`User joined conversation: ${conversation}`);

        socket.on(`chats/${conversation}`, (msg) => {
            console.log(`Message received in conversation ${conversation}:`, msg);
            io.emit(`chats/${conversation}`, msg);
        });
    });

    socket.on('typing', (chatId, user) => {
        console.log(`User ${user.fullname} is typing in chat ${chatId}`);
        socket.to(`chats.${chatId}`).emit('typing', user);
    });

    socket.on('stopTyping', (chatId) => {
        console.log(`Typing stopped in chat ${chatId}`);
        socket.to(`chats.${chatId}`).emit('stopTyping');
    });

    // socket.on('message', (chatId, message) => {
    //     console.log(`New message in chat ${chatId}:`, message);
    //     io.to(`chats.${chatId}`).emit('newMessage', message);
    // });

    socket.on("disconnect", () => {
        console.log(`User disconnected: ${socket.id}`);
    });
});

