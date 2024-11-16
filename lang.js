// Event listener for language selection
document.getElementById("language-dropdown").addEventListener("change", function() {
    let selectedLanguage = this.value;
    changeLanguage(selectedLanguage);
});

// Function to change language and update content
function changeLanguage(languageCode) {
    // Show the language change confirmation message
    const messageText = `Language has been changed to ${getLanguageName(languageCode)}`;
    document.getElementById("message").innerText = messageText;
    document.getElementById("language-message").style.display = "block";

    // Translate the content dynamically
    translateContent(languageCode);
}

// Function to get the full language name for the message
function getLanguageName(languageCode) {
    switch (languageCode) {
        case 'en': return "English";
        case 'es': return "Spanish";
        case 'fr': return "French";
        case 'de': return "German";
        case 'hi': return "Hindi";
        case 'it': return "Italian";
        default: return "English";
    }
}

// Function to translate all text content on the page
function translateContent(languageCode) {
    // List of elements to be translated
    const textElements = [
        {id: "heading", text: "Welcome to Digital Literacy Training"},
        {id: "intro", text: "Learn essential digital skills to enhance your career and personal growth."},
        {id: "book-session-btn", text: "Book Your Free Session"},
        {id: "footer", text: "© 2024 Digital Literacy Training. All rights reserved."}
    ];

    // Loop through each element and translate it
    textElements.forEach(element => {
        translateText(element.text, languageCode)
            .then(translatedText => {
                document.getElementById(element.id).innerText = translatedText;
            });
    });
}

// Function to translate text using Google Translate API
function translateText(text, languageCode) {
    const apiKey = 'YOUR_GOOGLE_TRANSLATE_API_KEY';  // Replace with your Google Translate API key
    const url = `https://translation.googleapis.com/language/translate/v2?key=${apiKey}`;

    return fetch(url, {
        method: 'POST',
        body: JSON.stringify({
            q: text,
            target: languageCode
        }),
        headers: {
            'Content-Type': 'application/json',
        },
    })
    .then(response => response.json())
    .then(data => {
        return data.data.translations[0].translatedText;
    })
    .catch(error => {
        console.error('Error during translation:', error);
        return text;  // Fallback to original text if error occurs
    });
}
