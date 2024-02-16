<?php

// application/controllers/Api.php

class Api extends CI_Controller {

    public function getData() {
        // Fetch data from your database or any other source
        $data = array(/* your fetched data */);
        
        // Convert data to JSON and send response
        $this->output->set_content_type('application/json')->set_output(json_encode($data));
    }

    public function uploadData() {
        // Handle data upload logic here
        // Retrieve uploaded data from $_POST or $_FILES
        
        // Example response
        $response = array('success' => true, 'message' => 'Data uploaded successfully');

        // Convert response to JSON and send
        $this->output->set_content_type('application/json')->set_output(json_encode($response));
    }
}
