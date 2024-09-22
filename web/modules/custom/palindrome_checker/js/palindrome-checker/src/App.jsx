import React, { useState } from "react";

const App = () => {
  const [inputString, setInputString] = useState("");
  const [isPalindrome, setIsPalindrome] = useState(null);
  const [checked, setChecked] = useState(false); 

  const checkPalindrome = () => {
    if (inputString.trim() === "") {
      setChecked(false);
      return;
    }

    const originalString = inputString.toLowerCase().replace(/[^a-z0-9]/g, "");

    const result = originalString === originalString.split("").reverse().join("");

    setIsPalindrome(result);
    setChecked(true);
  };

  const handleInputChange = (e) => {
    setInputString(e.target.value);
    setChecked(false);
  };

  return (
    <div style={{ textAlign: "center", marginTop: "50px" }}>
      <h1>Palindrome Checker</h1>

      <input
        type="text"
        value={inputString}
        onChange={handleInputChange}
        placeholder="Enter any string"
        style={{ padding: "10px", fontSize: "16px", width: "300px" }}
      />

      <button
        onClick={checkPalindrome}
        style={{ marginLeft: "10px", padding: "10px 20px", fontSize: "16px" }}
      >
        Check
      </button>

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
