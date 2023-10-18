import React from "react";
import { Button, Card } from "react-bootstrap";

function Card_C(props){
const firtsname = props.name
const email = props.email
const id = props.id
    return(
<Card style={{ width: '18rem' }}>
      <Card.Body>
        <Card.Title>{id}</Card.Title>
        <Card.Subtitle className="mb-2 text-muted">{firtsname}</Card.Subtitle>
        <Card.Text>
          Correo electronico: {email}
        </Card.Text>
        <Card.Link href="#">Card Link</Card.Link>
        <Card.Link href="#">Another Link</Card.Link>
      </Card.Body>
    </Card>
    );
}
export default Card_C;
if (document.getElementById('app')) {
    const Index = ReactDOM.createRoot(document.getElementById("app"));

    Index.render(
        <React.StrictMode>
            <Card_C/>
        </React.StrictMode>
    )
}
