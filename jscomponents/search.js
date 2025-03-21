const searchIcon = document.getElementById('search-icon');
const searchForm = document.getElementById('search-form');
const searchInput = document.getElementById('search-input');
const searchResult = document.getElementById('search-results');
const closeSearch = document.getElementById('close-search');


searchIcon.addEventListener('click', function(){
    searchForm.style.display = (searchForm.style.display === "none" || searchForm.style.display === '') ? 'flex' : 'none';
    searchResult.style.display = (searchForm.style.display === "none" || searchForm.style.display === '') ? 'flex' : 'none';
});

closeSearch.addEventListener('click', function(){ //when close button clicked, close the search form.
    searchForm.style.display = "none"; //x button pressed, hide the search
    searchResult.style.display = "none"; //when the x button on search is clicked, it hides the results from the page
})