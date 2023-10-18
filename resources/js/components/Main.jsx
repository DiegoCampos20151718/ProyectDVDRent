import React from "react";
import Card_C from "./Card_C";
import ListCards from "./ListCards";
import Menu from "./Menu";
import {Routes, Route, Navigate} from "react-router-dom";

function Main(){
    return(
        <Routes>
            <Route path="/ProyDVDRent/public/" element={<Menu/>}>
                <Route path="card" element={<Card_C/>}/>
                <Route path="Listcards" element={<ListCards/>}/>
                <Route path="*" element={<Navigate replace to="/"/>}/>
            </Route>
        </Routes>
    )
}
export default Main
