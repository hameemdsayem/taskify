// FAQ toggle
const questions = document.querySelectorAll('.question');
        
        questions.forEach(question => {
            question.addEventListener('click', () => {
                const answer = question.nextElementSibling;
                if (answer.style.display === 'block') {
                    answer.style.display = 'none';
                } else {
                    answer.style.display = 'block';
                }
            });
        });


// Menu bar
const menuIcon = document.querySelector('.menu-icon');
const navigation = document.querySelector('nav ul');

menuIcon.addEventListener('click', function () {
    navigation.classList.toggle('show');
});


// Login page