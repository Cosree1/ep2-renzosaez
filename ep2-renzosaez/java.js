const apiKey = '983a368b66de9a8f134d182974066e7b'; 
const apiUrl = `https://api.themoviedb.org/3/movie/popular?api_key=${apiKey}&language=es-ES&page=1`;

async function fetchMovies() {
    try {
        const response = await fetch(apiUrl);
        const data = await response.json();
        displayMovies(data.results);
    } catch (error) {
        console.error('Error al obtener las películas:', error);
    }
}

function displayMovies(movies) {
    const moviesContainer = document.getElementById('movies');
    moviesContainer.innerHTML = '';
    const limitedMovies = movies.slice(0, 6);

    limitedMovies.forEach(movie => {
        const movieElement = document.createElement('div');
        movieElement.classList.add('movie');
        movieElement.innerHTML = `
            <img src="https://image.tmdb.org/t/p/w500${movie.poster_path}" alt="${movie.title}">
            <h3>${movie.title}</h3>
            <p>${movie.overview}</p>
        `;
        moviesContainer.appendChild(movieElement);
    });
}

document.addEventListener('DOMContentLoaded', () => {
    fetchMovies();
});