<html>

<table>
    <tr>
        <th>Browser</th>
        <th>Sessions</th>
    </tr>
</table>

<?php
$analyticsData = Analytics::fetchVisitorsAndPageViews(Period::days(7));
//dd($analyticsData);
//echo($analyticsData);


$browserData = Analytics::fetchTopBrowsers(Period::days(7));
//print_r($browserData);

foreach ($browserData as $browser)
{

    echo"<tr>";
    echo "<td>" . $browser['browser'] . "</td>";
    echo "<td>" . $browser['sessions'] . "</td>";

    echo "</tr>";

}
?>

</html>
