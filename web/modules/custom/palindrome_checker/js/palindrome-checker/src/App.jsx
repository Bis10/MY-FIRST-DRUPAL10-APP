import React, { useState } from "react";

const App = () => {
  // State to store the input string and the palindrome result
  const [inputString, setInputString] = useState("");
  const [isPalindrome, setIsPalindrome] = useState(null);
  const [checked, setChecked] = useState(false); // State to track if the button has been clicked

  // Function to check if the string is a palindrome
  const checkPalindrome = () => {
    if (inputString.trim() === "") {
      // If the input is empty or only contains spaces, do not show any result
      setChecked(false);
      return;
    }

    // Remove non-alphanumeric characters and convert to lowercase
    const cleanedString = inputString.toLowerCase().replace(/[^a-z0-9]/g, "");

    // Compare cleaned string with its reverse
    const result = cleanedString === cleanedString.split("").reverse().join("");

    // Set the result and mark as checked
    setIsPalindrome(result);
    setChecked(true);
  };

  return (
    <div style={{ textAlign: "center", marginTop: "50px" }}>
      <h1>Palindrome Checker</h1>

      {/* Input field for the string */}
      <input
        type="text"
        value={inputString}
        onChange={(e) => setInputString(e.target.value)}
        placeholder="Enter a string"
        style={{ padding: "10px", fontSize: "16px", width: "300px" }}
      />

      {/* Button to trigger palindrome check */}
      <button
        onClick={checkPalindrome}
        style={{ marginLeft: "10px", padding: "10px 20px", fontSize: "16px" }}
      >
        Check
      </button>

      {/* Conditional rendering of result - display only if input is not empty */}
      {checked && inputString.trim() !== "" && (
        <h2>
          The string "{inputString}" is{" "}
          {isPalindrome ? (
            <span style={{ color: "green" }}>a palindrome</span>
          ) : (
            <span style={{ color: "red" }}>not a palindrome</span>
          )}
        </h2>
      )}
    </div>
  );
};

export default App;
