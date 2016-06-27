<?php 
/// <summary>
/// Make a end of your HTML Website
/// </summary>
/// <param name="scripts">Scripts what you need in your page</param>
/// <param name="afterbody">Are this function is called after body <without scripts> (true) or you don't wrote </body> (false as default)</param>
/// <returns>Nothing just "echo"-ing closing html tag</returns>
function end($scripts="",$afterbody=false)
{
    $return = "";
    if ($afterbody) {
        $return .= "</html>";
    }
    else {
        if($scripts == "")
        {
            $return .= "</body></html>";
        }
        else {
            $return .= $scripts.'</body></html>';
        }
    }
    echo $return;
}
?>