import { useState, useEffect } from "react";
import axios from "axios";
import "./App.css";

function App() {
  const [catImages, setCatImages] = useState([]);
  const [searchTerm, setSearchTerm] = useState("");

  useEffect(() => {
    axios
      .get("https://api.thecatapi.com/v1/images/search?limit=10")
      .then((response) => {
        setCatImages(response.data);
      })
      .catch((error) => {
        console.error("Error fetching cat images:", error);
      });
  }, []);

  const handleSearch = (event) => {
    setSearchTerm(event.target.value);
  };

  const filteredImages = catImages.filter((catImage) =>
    catImage.id.toLowerCase().startsWith(searchTerm.toLowerCase())
  );

  return (
    <div className="App">
      <h1>Cat Images</h1>
      <input
        type="text"
        placeholder="Search by id"
        value={searchTerm}
        onChange={handleSearch}
      />
      <ul>
        {filteredImages.map((catImage) => (
          <li key={catImage.id}>
            <img 
            src={catImage.url} 
            alt={`Cat ${catImage.id}`}
             />
            <p>{catImage.id}</p>
          </li>
        ))}
      </ul>
    </div>
  );
}

export default App;
