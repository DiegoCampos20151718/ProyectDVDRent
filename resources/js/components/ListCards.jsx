import React, { useState, useEffect } from "react";
import Example from "./Example";
import Card_C from "./Card_C";
import axios from 'axios';
import ReactDOM from 'react-dom/client';
import { Button, Card, Spinner } from "react-bootstrap";



function ListCards() {
    const [userData, serUserData] = useState({})
    useEffect(() => {
        const getUsers = async () => {
            await axios.get('http://localhost/ProyectTWeb/ProyectDVDRent/public/api/user_index')
                .then(function (response) {
                    // handle success
                    console.log(response);
                    serUserData(response.data);
                })
                .catch(function (error) {
                    // handle error
                    console.log(error);
                })
                .finally(function () {
                    // always executed
                })
        }
        getUsers()
    }, [])

    if (!userData.length) return
    <Spinner animation="border" role="status">
    <span className="visually-hidden">Loading...</span>
    </Spinner>

    return (
        <>
            {userData.map((user) =>(<Card_C name={user.name} email={user.email} id={user.id} />))}
        </>
    )
}
export default ListCards;

/*
if (document.getElementById('app')) {
    const Index = ReactDOM.createRoot(document.getElementById("app"));

    Index.render(
        <React.StrictMode>
            <ListCards />
        </React.StrictMode>
    )
}
*/
