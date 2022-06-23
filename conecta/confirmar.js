window.onload = () => {
    const formularios = document.querySelectorAll("td form");
    formularios.forEach(formulario => {
        formulario.onsubmit = (evento) => {
            const resposta = confirm("deseja excluir o item selecionado?");
            if(resposta === false)
            {
                evento.preventDefault();
            }
        };
    });
};
