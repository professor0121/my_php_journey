<?php
class message{
    const new_message="new message is that to create a leave message for it";

    public function messages(){
        echo self::new_message;
    }
}

$object_message=new message();
$object_message->messages();


//php constant used for setting the constan when we want to fixed data
?>
