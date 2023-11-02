import React, { useState } from 'react'
import axios from 'axios'
import { useNavigate } from 'react-router-dom'
import { Button, Form } from 'react-bootstrap'
import Row from 'react-bootstrap/Row';
import Col from 'react-bootstrap/Col';
import InputGroup from 'react-bootstrap/InputGroup';


function RegisterE() {
  const [validated, setValidated] = useState(false);
  const [formValue, setFormValue] = useState({
    email: '',
    password: '',
    c_password:'',
    first_name: '',
    last_name: '',
    phone_number: '',
    address: '',
    rol: ''
  })

  const navigate = useNavigate();

  const onChange = (e) => {
    e.persist();
    setFormValue({ ...formValue, [e.target.name]: e.target.value });
  }

  const handleSubmit = (e) => {
    if (e && e.preventDefault()) e.preventDefault();
    const formData = new FormData();
    formData.append("email", formValue.email)
    formData.append("password", formValue.password)
    formData.append("c_password", formValue.c_password)
    formData.append("first_name", formValue.first_name)
    formData.append("last_name", formValue.last_name)
    formData.append("phone_number", formValue.phone_number)
    formData.append("address", formValue.address)
    formData.append("rol", formValue.rol)
    axios.post("http://localhost/ProyectTWeb/ProyectDVDRent/public/api/register",
      formData,
      { headers: { 'Content-Type': 'multipart/form-data', 'Accept': 'application/json' } }
    ).then(response => {
      console.log('response:');
      console.log(response);
      navigate("/ProyectTWeb/ProyectDVDRent/public/Listcards");
    }).catch(error => {
      console.log(error);
    });
  };

  return (
    <Form noValidate validated={validated} onSubmit={handleSubmit}>
      <Row className="mb-3">
        <Form.Group as={Col} md="4" controlId="validationCustom01">
          <Form.Label>First name</Form.Label>
          <Form.Control
            type="text"
            name='first_name'
            placeholder="First name"
            defaultValue="Mark" value={formValue.first_name} onChange={onChange}
          />
          <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
        </Form.Group>
        <Form.Group as={Col} md="4" controlId="validationCustom02">
          <Form.Label>Last name</Form.Label>
          <Form.Control
            type="text"
            name='last_name'
            placeholder="Last name"
            defaultValue="Otto" value={formValue.last_name} onChange={onChange}
          />
          <Form.Control.Feedback>Looks good!</Form.Control.Feedback>
        </Form.Group>
        <Form.Group as={Col} md="4" controlId="validationCustomUsername">
          <Form.Label>Email address</Form.Label>
          <Form.Control type='email' placeholder='Enter email' name='email' value={formValue.email} onChange={onChange} />
        </Form.Group>
      </Row>
      <Row className="mb-3">
        <Form.Group as={Col} md="6" controlId="validationCustom03">
          <Form.Label>Password</Form.Label>
          <Form.Control type='password' placeholder='Password' name='password' value={formValue.password} onChange={onChange} />
          </Form.Group>
          <Form.Group as={Col} md="6" controlId="validationCustom04">    
          <Form.Label>C_Password</Form.Label>
          <Form.Control type='password' placeholder='Password' name='c_password' value={formValue.c_password} onChange={onChange} />
        </Form.Group>
        <Form.Group as={Col} md="3" controlId="validationCustom05">
          <Form.Label>Phone Number</Form.Label>
          <Form.Control
            type="text"
            name='phone_number'
            placeholder="Phone_number"
            defaultValue="449289201" value={formValue.phone_number} onChange={onChange}
          />
        </Form.Group>
      </Row>
      <Row className='mb-3'>
        <Form.Group as={Col} md="6" controlId="validationCustom06">
          <Form.Label>Address</Form.Label>
          <Form.Control
            type="text"
            name='address'
            placeholder="Address"
            defaultValue="Cerrada Níspero #102" value={formValue.address} onChange={onChange}
          />
        </Form.Group>
        <Form.Group as={Col} md="6" controlId="validationCustom07">
          <Form.Label>Rol</Form.Label>
          <Form.Control
            type="text"
            name='rol'
            placeholder="Rol"
            defaultValue="Employ, boss" value={formValue.rol} onChange={onChange}
          />
        </Form.Group>
      </Row>
      <Form.Group className="mb-3">
        <Form.Check
          required
          label="Agree to terms and conditions"
          feedback="You must agree before submitting."
          feedbackType="invalid"
        />
      </Form.Group>
      <Button type="submit">Submit form</Button>

    </Form>
  );
}

export default RegisterE;