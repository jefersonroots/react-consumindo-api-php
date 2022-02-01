import "./styles.css";
import React, { useState, useEffect } from "react";

export default function App() {
  const [data, setData] = useState([]);

  const getDados = async () => {
    fetch("https://110.100.2.9/api/index.php")
      .then((response) => response.json())
      .then((responseJson) => setData(responseJson.registro));
  };

  useEffect(() => {
    getDados();
  }, []);

  return (
    <div>
      <h1>Listar</h1>
      <table>
        <thead>
          <tr>
            <th>CÓDIGO</th>
            <th>FILIAL</th>
          </tr>
        </thead>
        <tbody>
          {Object.values(data).map((registro) => (
            <tr key={registro.CODIGO_FILIAL}>
              <td>{registro.CODIGO_FILIAL}</td>
              <td>{registro.FILIAL}</td>
              <td>Visualizar Editar Apagar</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
}
