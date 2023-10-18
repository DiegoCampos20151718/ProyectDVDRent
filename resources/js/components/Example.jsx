import React from 'react';
import ReactDOM from 'react-dom/client';
import { Button, Card } from 'react-bootstrap';


function Example() {
    return (
        <Card style={{ width: '18rem' }}>
        <Card.Img variant="top" src="holder.js/100px180" />
        <Card.Body>
          <Card.Title>Ora pues</Card.Title>
          <Card.Text>
            Hola
          </Card.Text>
          <Button variant="primary">Hola buenos días</Button>
        </Card.Body>
      </Card>
    );
}

export default Example;

if (document.getElementById('app')) {
    const Index = ReactDOM.createRoot(document.getElementById("app"));

    Index.render(
        <React.StrictMode>
            <Example/>
        </React.StrictMode>
    )
}
