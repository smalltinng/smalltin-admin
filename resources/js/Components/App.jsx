// src/App.js
import React from '@inertiajs/react';
import { BrowserRouter as Router, Route, Switch } from 'react-router-dom';
import Dashboard from './Pages/Dashboard';
import Transactions from './Pages/Transactions';
import LadderBoard from './Pages/LadderBoard';
import Messages from './Pages/Messages';
import QuestionBank from './Pages/QuestionBank';
import AllUsers from './Pages/Users';
import ProfileEdit from './Pages/ProfileEdit';
import ProfileUpdate from './Pages/ProfileUpdate';
import ProfileDestroy from './Pages/ProfileDestroy';
import useAuth from './hooks/useAuth';

const Route = ({ component: Component, ...rest }) => {
    const isAuthenticated = useAuth();
    return (
        <Route
            {...rest}
            render={(props) =>
                isAuthenticated ? <Component {...props} /> : <h1>Unauthorized</h1>
            }
        />
    );
};

const App = () => {
    return (
        <Router>
            <Switch>
                <Route path="/admin/dashboard" component={Dashboard} />
                <Route path="/admin/transactions" component={Transactions} />
                <Route path="/admin/ladder-board" component={LadderBoard} />
                <Route path="/admin/messages" component={Messages} />
                <Route path="/admin/question-bank" component={QuestionBank} />
                <Route path="/admin/all-user" component={AllUsers} />
                <Route path="/admin/profile/edit" component={ProfileEdit} />
                <Route path="/admin/profile/update" component={ProfileUpdate} />
                <Route path="/admin/profile/destroy" component={ProfileDestroy} />
            </Switch>
        </Router>
    );
};

export default App;
