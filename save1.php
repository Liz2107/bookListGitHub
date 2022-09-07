<?php
if(isset($_POST["mytext"]))
{
    $mytext = "";
	$file = "defaultList1.txt";
    //changed thing inside post to specific dropdown- if this fails revert to general form name
    $text3 = $_POST["text_area"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $rating = $_POST["rating"];
    $comments = $_POST["comments"];
    $quote = $_POST["quote"];

    $nonfiction = $_POST["Nonfiction"];
    //genres
    $literary = $_POST["Literary"];
    $contemporary = $_POST["Contemporary"];
    $historical = $_POST["Historical"];
    $fantasy = $_POST["Fantasy"];
    $thriller = $_POST["Thriller"];
    $science = $_POST["Science"]; 
    $nature = $_POST["Nature"];
    $classic = $_POST["Classic"]; 
    $scienceFiction = $_POST["ScienceFiction"];
    $dystopian = $_POST["Dystopian"];
    $speculativeFiction = $_POST["SpeculativeFiction"];
    $philosophy = $_POST["Philosophy"];
    $magicalRealism = $_POST["MagicalRealism"];
    $mystery = $_POST["Mystery"];
    $shortStories = $_POST["ShortStories"];
    $youngAdult = $_POST["YoungAdult"];
    $politics = $_POST["Politics"];
    $romance = $_POST["Romance"];

    $emotional = $_POST["Emotional"];
    $reflective = $_POST["Reflective"];
    $adventurous = $_POST["Adventurous"];
    $sad = $_POST["Sad"];
    $mysterious = $_POST["Mysterious"];
    $informative = $_POST["Informative"];
    $dark = $_POST["Dark"];
    $challenging = $_POST["Challenging"];
    $tense = $_POST["Tense"];
    $funny = $_POST["Funny"];
    $hopeful = $_POST["Hopeful"];
    $lighthearted = $_POST["Lighthearted"];
    $inspiring = $_POST["Inspiring"];
    $relaxing = $_POST["Relaxing"];

    $pacing = $_POST["pacing"];

    $reread = $_POST["Reread"] . "X";

    $series = $_POST["Series"] . "X";

    // $split_names = explode($student_name, " ");
    // //these currently show up as blank spaces
    // $last_name = $split_names[1];
    // $first_name = $split_names[0];

    $output_to_write = $title . "*&*" . $author . "*&*" . $rating . "*&*" . $comments . "*&*" . $quote . "*&*" . $literary . "*" . $contemporary . "*" . $historical . "*" . $fantasy . "*" . $thriller . "*" . $science . "*" . $nature . "*" . $classic . "*" . $scienceFiction . "*" . $dystopian . "*" . $speculativeFiction . "*" . $philosophy . "*" . $magicalRealism . "*" . $mystery . "*" . $shortStories . "*" . $youngAdult . "*" . $politics . "*" . $romance . "*&*" . $emotional . "*" . $reflective . "*" . $adventurous . "*" . $sad . "*" . $mysterious . "*" . $informative . "*" . $dark . "*" . $challenging . "*" . $tense . "*" . $funny . "*" . $hopeful . "*" . $lighthearted . "*" . $inspiring . "*" . $relaxing . "*&*" . $pacing . "*&*" . $reread . "*&*" . $series . "*&*" . $nonfiction . "*&*";
    
	// POST field mytext into the text and put a new line on the end.
	// LOCK_EX prevents anyone else from writing to the file 
	file_put_contents($file, $output_to_write . "\r\n", FILE_APPEND);
    file_put_contents($file, $mytext, FILE_APPEND);

    if($title != "")
    {
        header("Location:/Cutting/bookListAlt.html");
    }
}
?>


<!-- old stuff here -->
<!-- <?php
// if(isset($_POST["mytext"]))
// {
// 	$file = "defaultList.txt";
//     //changed parameter inside post to specific dropdown name
// 	$title = $_POST["title"];
//     $author = $_POST["author"];
//     $reviewer = $_POST["reviewer"];
//     $quote = $_POST["quote"];
//     $rating = $_POST["rating"];
//     $comments = $_POST["comments"];
//     $text3 = $_POST["text_area"];

//     $output_to_write = $title . "***" . $author . "***" . $reviewer . "***" . $rating . "***" . $comments . "***" . $quote;

// 	// POST field mytext into the text and put a new line on the end.
// 	// LOCK_EX prevents anyone else from writing to the file 
// 	file_put_contents($file, $output_to_write . "\r\n", FILE_APPEND);
//     file_put_contents($file, $mytext . "\r\n", FILE_APPEND);

//     if($title != "")
//     {
//         header("Location:/Cutting/awardsFormTesting/oldWebsite/books/readingList");
//     }
// }
?> -->