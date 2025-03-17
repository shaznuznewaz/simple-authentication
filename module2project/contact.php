<?php

$contact=[];

function addContact(array &$contact, string $name, string $email, string $phone){
    $contact[] =["name"=>$name, "email"=>$email, "phone"=>$phone];
}

function displayContacts(array $contacts){
    
    if(empty($contacts)){
        echo "No contacts to display\n";
    }
    else{
        foreach($contacts as $contact){
            echo "Name: ".$contact['name']."\n";
            echo "Email: ".$contact['email']."\n";
            echo "Phone: ".$contact['phone']."\n";
        }
    }
    
}


while(true){
    echo "\nContact Management App\n";
    echo "1. Add Contact\n";
    echo "2. View Contact\n";
    echo "3. Exit\n";
    $choice=(int)readline("Enter your choice: ");

    if($choice==1){
        $name=readline("Enter Name: ");
        $email=readline("Enter Email: ");
        $phone=readline("Enter Phone: ");
        addContact($contact, $name, $email, $phone);
        echo "$name added to contacts\n"; 
        echo "$email added to contacts\n";
        echo "$phone added to contacts\n";
    }elseif($choice==2){
        displayContacts($contact);
    }elseif($choice==3){
        echo "Exiting.....\n";
        break;
    }else{
        echo "Invalid Choice.Please try again\n";
    }
}


?>