<?php
function check_adult($age) {
    $adult_check = ($age >= 20) ? "어른" : "아이";
    print $adult_check." 입니다.";
}
$myage = 19;
check_adult($myage);
?>

<?php
function get_today() {
    return array(date('Y'), date('m'), date('d'));
}
list($year, $month, $day) = get_today();
print "$year년 $month월 $day일";
?>
