<?php
if (isset($_POST["month"]) && isset($_POST["year"])) {
  // Récupérer les valeurs sélectionnées dans les listes déroulantes
  $month = $_POST["month"];
  $year = $_POST["year"];

  function renvoiNumMois($mois)
  {

    $numMois = 0;

    switch ($mois) {
      case "january":
        $numMois = 1;
        break;
      case "february":
        $numMois = 2;
        break;
      case "march":
        $numMois = 3;
        break;
      case "april":
        $numMois = 4;
        break;
      case "may":
        $numMois = 5;
        break;
      case "june":
        $numMois = 6;
        break;
      case "july":
        $numMois = 7;
        break;
      case "august":
        $numMois = 8;
        break;
      case "september":
        $numMois = 9;
        break;
      case "october":
        $numMois = 10;
        break;
      case "november":
        $numMois = 11;
        break;
      case "december":
        $numMois = 12;
        break;
    }
    return $numMois;
  }

  function traductToFrenchMonth($month)
  {

    $frenchMonth = "";
    switch ($month) {
      case "january":
        $frenchMonth = "janvier";
        break;
      case "february":
        $frenchMonth = "février";
        break;
      case "march":
        $frenchMonth = "mars";
        break;
      case "april":
        $frenchMonth = "avril";
        break;
      case "may":
        $frenchMonth = "mai";
        break;
      case "june":
        $frenchMonth = "juin";
        break;
      case "july":
        $frenchMonth = "juillet";
        break;
      case "august":
        $frenchMonth = "août";
        break;
      case "september":
        $frenchMonth = "septembre";
        break;
      case "october":
        $frenchMonth = "octobre";
        break;
      case "november":
        $frenchMonth = "novembre";
        break;
      case "december":
        $frenchMonth = "12";
        break;
    }
    return $frenchMonth;
  }


  $num_month = renvoiNumMois($month);

  // Déterminer le nombre de jours dans le mois sélectionné
  $num_days = cal_days_in_month(CAL_GREGORIAN, $num_month, $year);

  // Afficher le calendrier dans un tableau HTML
  echo '<table border="1"';
  echo '<tr><th style="background-color: grey;" colspan=\'7\'>Calendrier de ' . traductToFrenchMonth($month) . ' ' . $year . '</th></tr>';
  echo '<tr><td style="width: 50px; height: 50px;">Lundi</td><td>Mardi</td><td>Mercredi</td><td>Jeudi</td><td>Vendredi</td><td>Samedi</td><td>Dimanche</td></tr>';
  for ($i = 1; $i <= $num_days; $i++) {
    // Afficher un jour du calendrier dans une cellule de tableau HTML
    echo '<td style="width: 100px; height: 100px;">' . $i . '</td>';
    // Si c'est le dernier jour de la semaine, passer à la ligne suivante
    if (($i % 7) == 0) {
      echo "</tr>";
    }
  }
  echo "</table>";
}

?>
<form method="post">
  <label for="month">Choisissez un mois:</label><br>
  <select id="month" name="month">
    <option value="january">Janvier</option>
    <option value="february">Février</option>
    <option value="march">Mars</option>
    <option value="april">Avril</option>
    <option value="may">Mai</option>
    <option value="june">Juin</option>
    <option value="july">Juillet</option>
    <option value="august">Août</option>
    <option value="september">Septembre</option>
    <option value="october">Octobre</option>
    <option value="november">Novembre</option>
    <option value="december">Décembre</option>
  </select>
  <br>
  <label for="year">Choisissez une année:</label><br>
  <select id="year" name="year">
    <option value="2020">2020</option>
    <option value="2021">2021</option>
    <option value="2022">2022</option>
    <option value="2023">2023</option>
  </select>
  <br><br>
  <input type="submit" value="Afficher le calendrier">
</form>