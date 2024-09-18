import React, { useEffect, useState } from "react";

const App = () => {
  const [nodes, setNodes] = useState([]);

  useEffect(() => {
    fetch("/jsonapi/node/article")
      .then((response) => response.json())

      .then((data) => setNodes(data.data));
  }, []);

  return (
  <div>
    <h1>Article List</h1>

    <ul>
      {nodes.map((node) => (
        <li key={node.id}>
          <h2>{node.attributes.title}</h2>
          <p>{node.attributes.body.value}</p>
        </li>
      ))}
    </ul>
  </div>
);
}

export default App;
