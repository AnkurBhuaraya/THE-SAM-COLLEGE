document.addEventListener('DOMContentLoaded', function () {
    // Tag Us Button Interaction
    const tagPhotosBtn = document.getElementById('tag-photos-btn');
    const loadingScreen = document.getElementById('loading-screen');
    const errorMessage = document.getElementById('error-message');

    tagPhotosBtn.addEventListener('click', () => {
        // Show Loading Screen
        loadingScreen.style.display = 'block';
        
        // Simulate loading process
        setTimeout(() => {
            loadingScreen.style.display = 'none';
            errorMessage.style.display = 'block';
        }, 2000);  // 2 second delay
    });
});
