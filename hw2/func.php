<?php
function calnumber($score = 80)
{
    switch ($score = 90)
    {
        case ($score >= 80):
            echo "Grade A";
            break;
        case ($score >= 75):
            echo "Grade B+";
            break;
        case ($score >= 70):
            echo "Grade B";
            break;
        case ($score >= 65):
            echo "Grade C+";
            break;
        case ($score >= 60):
            echo "Grade C";
            break;
        case ($score >= 55):
            echo "Grade D+";
            break;
        case ($score >= 50):
            echo "Grade D";
            break;
        default:
            echo "Grade F";
            break;
    }
    echo "<br>";
    return $score;
}
echo calnumber();
echo "<br>";
?>