
  // Fonction pour gérer le filtrage des clients
  function filterClients() {
    const input = document.getElementById('search').value.toLowerCase();
    const rows = document.getElementsByTagName('tr');
    for (let i = 1; i < rows.length; i++) {
      const name = rows[i].getElementsByTagName('td')[0].textContent.toLowerCase();
      rows[i].style.display = name.includes(input) ? '' : 'none';
    }
  }

  // Fonction pour gérer le tri des clients
  function sortClients() {
    const sortBy = document.getElementById('sort').value;
    const rows = document.getElementsByTagName('tr');
    const sortedRows = Array.from(rows).slice(1);

    sortedRows.sort((a, b) => {
      const aValue = a.getElementsByTagName('td')[sortBy === 'statut' ? 5 : 0].textContent;
      const bValue = b.getElementsByTagName('td')[sortBy === 'statut' ? 5 : 0].textContent;

      if (sortBy === 'nom') {
        return aValue.localeCompare(bValue);
      } else {
        return aValue.localeCompare(bValue, undefined, { numeric: true });
      }
    });

    const tableBody = document.querySelector('table tbody');
    for (const row of sortedRows) {
      tableBody.appendChild(row);
    }
  }

  // Écouteurs d'événements pour les boutons "Filtrer" et "Trier"
  document.getElementById('filterBtn').addEventListener('click', filterClients);
  document.getElementById('sortBtn').addEventListener('click', sortClients);