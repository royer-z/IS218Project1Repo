<?php
$questionName = $_POST['questionName'];
$questionBody = $_POST['questionBody'];
$questionSkills = $_POST['questionSkills'];

checkQuestionName($questionName);
checkQuestionBody($questionBody);
checkQuestionSkills($questionSkills);

function checkQuestionName ($data) {
    $validQuestionName = TRUE;
    if (empty($data)) {
        print "Question name error: please enter a question name.<br>";
        $validQuestionName = FALSE;
    }
    if (strlen($data) < 3) {
        if (strlen($data) == 0) {
            print "Question name error: please enter a question name that is at least 3 characters long. Your entry is ".strlen($data)." characters long.<br>";
        }
        else {
            print "Question name error: please enter a question name that is at least 3 characters long. Your entry '".$data."' is ".strlen($data)." characters long.<br>";
        }
        $validQuestionName= FALSE;
    }
    if ($validQuestionName == TRUE) {
        print "Valid question name: ".$data."<br>";
    }
}

function checkQuestionBody ($data) {
    $validQuestionBody = TRUE;
    if (empty($data)) {
        print "Question body error: please enter a question body.<br>";
        $validQuestionBody = FALSE;
    }
    if (strlen($data) >= 500) {
        print "Question body error: please enter a question body that is less than 500 characters long. Your entry is ".strlen($data)." characters long.<br>";
        $validQuestionBody = FALSE;
    }
    if ($validQuestionBody == TRUE) {
        print "Valid question body: ".$data."<br>";
    }
}

function checkQuestionSkills($data) {
    $data = str_replace(' ', '', $data);
    $data = explode(',', $data);

    if(count($data) < 2) {
        print "Question skills error: please enter at least 2 question skills.<br>";
    }
    else {
        print "Valid question skills.<br>";
    }

    print_r($data);
}
?>