import React, { useState, useEffect } from 'react';
import './App.css';

import Start from './components/Start';
import Question from './components/Question';
import End from './components/End';
import Modal from './components/Modal';
import quizData from './data/quiz.json';

let interval;

const App = () => {
  const [step, setStep] = useState(0); // Step 0 for topic selection
  const [selectedTopic, setSelectedTopic] = useState(null);
  const [questions, setQuestions] = useState([]);
  const [activeQuestion, setActiveQuestion] = useState(0);
  const [answers, setAnswers] = useState([]);
  const [showModal, setShowModal] = useState(false);
  const [time, setTime] = useState(0);

  useEffect(() => {
    if(step === 3) {
      clearInterval(interval);
    }
  }, [step]);

  const handleTopicSelect = (topic) => {
    setSelectedTopic(topic);
    setQuestions(quizData.topics[topic]); // Load questions for the selected topic
    setStep(1); // Move to start quiz screen
  };

  const quizStartHandler = () => {
    setStep(2);
    interval = setInterval(() => {
      setTime(prevTime => prevTime + 1);
    }, 1000);
  };

  const resetClickHandler = () => {
    setActiveQuestion(0);
    setAnswers([]);
    setStep(2);
    setTime(0);
    interval = setInterval(() => {
      setTime(prevTime => prevTime + 1);
    }, 1000);
  };

  return (
    <div className="App">
      {step === 0 && (
        <div>
          <h1>Select a Topic</h1>
          {Object.keys(quizData.topics).map((topic, index) => (
            <button key={index} onClick={() => handleTopicSelect(topic)}>
              {topic}
            </button>
          ))}
        </div>
      )}
      
      {step === 1 && <Start onQuizStart={quizStartHandler} />}
      
      {step === 2 && (
        <Question 
          data={questions[activeQuestion]}
          onAnswerUpdate={setAnswers}
          numberOfQuestions={questions.length}
          activeQuestion={activeQuestion}
          onSetActiveQuestion={setActiveQuestion}
          onSetStep={setStep}
        />
      )}
      
      {step === 3 && (
        <End 
          results={answers}
          data={questions}
          onReset={resetClickHandler}
          onAnswersCheck={() => setShowModal(true)}
          time={time}
        />
      )}

      {showModal && (
        <Modal 
          onClose={() => setShowModal(false)}
          results={answers}
          data={questions}
        />
      )}
    </div>
  );
};

export default App;