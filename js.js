const form = document.getElementById('formularioestudiante');
const studentsTable = document.getElementById('tablaestudiante').querySelector('tbody');

form.addEventListener('submit', (event) => {
    event.preventDefault();

    const codigo = form.codigo.value.trim();
    const nombre = form.nombre.value.trim();
    const nota1 = parseFloat(form.nota1.value);
    const nota2 = parseFloat(form.nota2.value);
    const nota3 = parseFloat(form.nota3.value);
    const nota4 = parseFloat(form.nota4.value);

    if ([nota1, nota2, nota3, nota4].some(nota => nota < 0 || nota > 5)) {
        alert('Todas las notas deben estar en el rango de 0 a 5.');
        return;
    }
    

    const definitiva = (nota1 * 0.2) + (nota2 * 0.2) + (nota3 * 0.2) + (nota4 * 0.4);

    

    const newRow = tablaestudiante.insertRow();
    newRow.innerHTML = `
        <td>${codigo}</td>
        <td>${nombre}</td>
        <td>${nota1}</td>
        <td>${nota2}</td>
        <td>${nota3}</td>
        <td>${nota4}</td>
        




        <td>${definitiva.toFixed(1)}</td>
    `;

    form.reset();
});
