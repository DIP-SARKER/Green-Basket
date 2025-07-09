document.addEventListener('DOMContentLoaded', function () {

    // === Sign Up Form Validation ===



    // === FAQ TOGGLE ===
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        question.addEventListener('click', () => {
            faqItems.forEach(otherItem => {
                if (otherItem !== item && otherItem.classList.contains('active')) {
                    otherItem.classList.remove('active');
                }
            });
            item.classList.toggle('active');
        });
    });




    // === REFERRAL SLIDER ===
    const slider = document.getElementById('friends-count');
    const friendsValue = document.getElementById('friends-value');
    const earningsValue = document.getElementById('earnings-value');

    if (slider && friendsValue && earningsValue) {
        const earningsPerFriend = 100;

        const updateValues = () => {
            const friendCount = parseInt(slider.value);
            const earnings = friendCount * earningsPerFriend;
            friendsValue.textContent = friendCount;
            earningsValue.textContent = earnings;
        };

        updateValues();
        slider.addEventListener('input', updateValues);
    }

});