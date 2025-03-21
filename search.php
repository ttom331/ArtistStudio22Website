<?php

include ('classes/dbh.classes.php');

class GetSearch extends Dbh{
    public function search($search){
        $getSearch = $this->connect()->prepare('SELECT * FROM prints WHERE print_Name LIKE :search LIMIT 5');
        $searchTerm = '%' . $search . '%';
        $getSearch->bindParam(':search', $searchTerm, PDO::PARAM_STR);
        $getSearch->execute();
        $prints = $getSearch->fetchAll(PDO::FETCH_ASSOC);
        return $prints;

    }
}




if (isset($_POST['input'])) {
    $input = $_POST['input'];

    $getSearch = new GetSearch();
    $results = $getSearch->search($input);

    if (!empty($results)) {
        foreach ($results as $row) {
            echo '<div class="search-result-item">';
            echo '<a><img src="/assets/products/' . htmlspecialchars($row['print_Image']) . '" alt="Print" style="width:50px; height: 50px;"></a>';
            echo '<a href="selectedPrints.php?print_ID=' . htmlspecialchars($row['print_ID']) . '"><p>' . htmlspecialchars($row['print_Name']) . '</p></a>';
            echo '<a><p>£' . htmlspecialchars($row['print_Price']) . '</p></a>';
            echo '</div>';
        }
        echo '<p style="font-weight: 600;">Search results for "' . htmlspecialchars($input) . '"</p>';
    } else {
        echo '<div class="search-result-item">'; //if empty say there are no results found
        echo '<p>No results found for "' .htmlspecialchars($input) . '" </p>';
        echo '</div>';
    }
}
?>





