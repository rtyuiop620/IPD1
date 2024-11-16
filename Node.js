const express = require('express');
const app = express();
app.use(express.json());

let db;  // Assume a connection to a MySQL or similar database

// Fetch watched content for a user
app.get('/user/:userId/watched-content', (req, res) => {
    const { userId } = req.params;
    db.query(`
        SELECT c.title, c.description, uc.watched_on 
        FROM user_content uc 
        JOIN content c ON uc.content_id = c.content_id 
        WHERE uc.user_id = ?`, 
        [userId], 
        (err, results) => {
            if (err) return res.status(500).send(err);
            res.json(results);
    });
});

// Fetch quiz results for a user
app.get('/user/:userId/quiz-results', (req, res) => {
    const { userId } = req.params;
    db.query(`
        SELECT quiz_id, score, date_taken 
        FROM user_quiz_results 
        WHERE user_id = ? 
        ORDER BY date_taken DESC`, 
        [userId], 
        (err, results) => {
            if (err) return res.status(500).send(err);
            res.json(results);
    });
});

app.listen(3000, () => console.log("Server running on port 3000"));
