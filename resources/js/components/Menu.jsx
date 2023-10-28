import Container from "react-bootstrap/Container";
import Nav from "react-bootstrap/Nav";
import Navbar from "react-bootstrap/Navbar";
import { Link, Outlet } from "react-router-dom";

function Menu() {
    return (
        <>
            <Navbar bg="dark" variant="dark">
                <Container>
                    <Navbar.Brand href="#home">DVD PALACE</Navbar.Brand>
                    <Nav className="me-auto">
                        <Nav.Link as={Link} to="">Home</Nav.Link>
                        <Nav.Link as={Link} to="RegisterE">register</Nav.Link>
                        <Nav.Link as={Link} to="Login">login</Nav.Link>
                        <Nav.Link as={Link} to="Listcards">Listcards</Nav.Link>
                    </Nav>
                </Container>
            </Navbar>
            <section>
                <Container>
                    <Outlet>
                    </Outlet>
                </Container>
            </section>
        </>
    )
}
export default Menu
