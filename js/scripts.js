document.getElementById('commentForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const comment = document.getElementById('comment').value;

    const commentCard = document.createElement('div');
    commentCard.classList.add('comment-card');
    commentCard.innerHTML = `
        <h3>${name}</h3>
        <p>${comment}</p>
        <small>${email}</small>
    `;

    document.querySelector('.comments-grid').appendChild(commentCard);

    // Reset the form
    document.getElementById('commentForm').reset();
});
