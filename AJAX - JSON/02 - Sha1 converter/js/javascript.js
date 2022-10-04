window.addEventListener("load", () => {
    let node = document.querySelector("input");
    node.onkeyup = () => {
       let value = node.value;

       let formData = new FormData();
       formData.append("input", value); // $_POST["input"]

       fetch("ajax.php", {
           method : "post",
           body : formData
       })
       .then(response => response.json())
       .then(data => {
           let divNode = document.createElement("div");
           divNode.append(value + " : " + data);

           let parentNode = document.querySelector("#result");
           parentNode.firstChild.remove();
           parentNode.append(divNode);
       })
    }
})
