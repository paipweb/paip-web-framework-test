<?php
/// <summary>
/// Make a start of your HTML Website
/// </summary>
/// <param name="title">Title of website</param>
/// <param name="author">Author of website</param>
/// <param name="description">Description of Website (Search Engines using it as description)</param>
/// <param name="keyword">Keywords of Website</param>
/// <param name="copyright">Copyrights</param>
/// <param name="index">OPTIONS are "ALL" as default it allowing to index your website in search engines | "NOINDEX" Search engines will not can index your site | "NOFOLLOW" Search engines will not follow by hyperlinks to your another pages | "NONE" Search Engines will not can index your site </param>
/// <param name="lang">Language of site (in notation ISO 639-1 f.e. "pl")</param>
/// <param name="last_modified">When you last modified this file? (in notation )</param>
/// <param name="frames">Frameworks (CSS) and/or more meta tags</param>
/// <param name="expires">When site expires</param>
/// <param name="contact_email">Contact E-mail</param>
/// <returns>Nothing just "echo"-ing HEAD section with opening html tag</returns>
///AFTER THAT FUNCTION OPEN TAG BODY
function start($title,$author="",$description="",$keyword="",$copyright="",$index="ALL",$lang="",$last_modified="",$frames="",$expires="",$contact_email="")
{
	$return = "<html";
    if($lang == "")
    {
        $return .= "><head>";
    }
    else {
        $return .= ' lang="'.$lang.'"><head>';
    }
    if ($title == "")
    {
    }
    else {
        $return .= "<title>".$title."</title>";
    }
    $return .= '<meta charset="utf-8"/>';
    if ($author =="")
    {
    }
    else {
        $return .= '<meta name="author" content="'.$author.'"/><meta name="web_author" content="'.$author.'"/>';
    }
    if($description=="")
    {
    }
    else {
        $return .= '<meta name="description" content="'.$description.'"/>';
    }
    if ($index == "")
    {
    }
    else {
        $return .= '<meta name="robots" content="'.$index.'"/>';
    }
    if ($copyright == "")
    {
    }
    else {
        $return .= '<meta name="copyright" content="'.$copyright.'"/>';
    }
    $return .= '<meta http-equiv="X-UA-Compatible" content="IE=edge"/><meta name="viewport" content="width=device-width, initial-scale=1"/>';
    if ($contact_email == "")
    {
    }
    else {
        $return .= '<meta name="contact" content="'.$contact_email.'"/>';
    }
    if ($lang == "")
    {
    }
    else {
        $return .= '<meta http-equiv="content-language" content="'.$lang.'"/>';
    }
    if ($last_modified == "")
    {
    }
    else {
        $return .= '<meta http-equiv="last-modified" content="'.$last_modified.'"/>';
    }
    if ($expires == "")
    {
    }
    else {
        $return .= '<meta http-equiv="expires" content="'.$expires.'"/>';
    }
    $return .= $frames.'</head>';
    echo $return;
}
?>