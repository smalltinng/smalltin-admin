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
        console.log(`User ${user.username} is typing in chat ${chatId}`);
        // socket.to(`chats.${chatId}`).emit('typing', user);
        io.to(`chats.${chatId}`).emit('typing', user);
        socket.broadcast.emit(`typing/${chatId}`,  user);
    });

    socket.on('stopTyping', (chatId) => {  
        console.log(`Typing stopped in chat ${chatId}`);
        // io.to(`chats.${chatId}`).emit('stopTyping');
        io.to(`stopTyping/${chatId}`, "Stop");
        socket.broadcast.emit(`stopTyping/${chatId}`, );


    });

    socket.on('message', (chatId, message) => {
        console.log(`News message in chat ${chatId}:`, message);
        io.to(`chats.${chatId}`).emit('newMessage', message);
        socket.broadcast.emit(`message/${chatId}`, message);

    });

    socket.on("disconnect", () => {
        console.log(`User disconnected: ${socket.id}`);
    });
});

