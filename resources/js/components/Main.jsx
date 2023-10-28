import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import Login from "./Login";
import RegisterE from "./RegisterE";
import {Routes, Route, Navigate} from "react-router-dom";

function Main(){
    return(
        <Routes>
            <Route path="/ProyectTWeb/ProyectDVDRent/public/" element={<Menu/>}>
                <Route path="RegisterE" element={<RegisterE/>}/>
                <Route path="Login" element={<Login/>}/>
                <Route path="Listcards" element={<ListCards/>}/>
                <Route path="*" element={<Navigate replace to="/"/>}/>
            </Route>
        </Routes>
    )
}
export default Main
