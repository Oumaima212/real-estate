document.addEventListener('DOMContentLoaded', () => {
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const searchResults = document.getElementById('search-results');

    const contentToSearch = [
        {
            title: 'About Us',
            text: 'TAMMI MONTGOMERY REAL ESTATE EXPERTS. Finally, a real estate team who knows how to handle your situation. If you\'re looking to buy or sell in the Shreveport-Bossier City area, you can take comfort in knowing you\'re working with the best.'
        }
        // Add more content here if needed
    ];

    searchForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const query = searchInput.value.toLowerCase();
        const results = contentToSearch.filter(item => item.text.toLowerCase().includes(query));

        displayResults(results);
    });

    function displayResults(results) {
        searchResults.innerHTML = '';

        if (results.length === 0) {
            searchResults.innerHTML = '<p>No results found.</p>';
            return;
        }

        results.forEach(result => {
            const resultItem = document.createElement('div');
            resultItem.classList.add('result-item');
            resultItem.innerHTML = `<h2>${result.title}</h2><p>${result.text}</p>`;
            searchResults.appendChild(resultItem);
        });
    }
});
