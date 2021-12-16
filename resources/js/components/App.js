import React from 'react';
import ReactDOM from 'react-dom';
import "./fontawesome";
import {BrowserRouter as Router, Switch, Route} from 'react-router-dom';
import dashboard from "./dashboard";
import createPosts from "./createPosts";
import EditPosts from "./EditPosts";
import "../../css/app.css";


function App() {
    return (
        <Router>
        <>
            <Switch>
                <Route path="/dashboard" exact component={dashboard} />
                <Route path="/addPosts" exact component={createPosts} />
                <Route path="/edit/:id" exact component={EditPosts} />
            </Switch>
        </>
        </Router>
    );
}

export default App;

if (document.getElementById('app')) {
    ReactDOM.render(<App/>, document.getElementById('app'));
}
