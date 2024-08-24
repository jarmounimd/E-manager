
document.addEventListener("DOMContentLoaded", function() {
    const filiereId = document.querySelector('.main-container').dataset.filiereId;
    const modules = document.querySelectorAll('.module');

    const sendDataBtn = document.getElementById('sendDataBtn');
    sendDataBtn.addEventListener('click', sendDataToPHP);

    modules.forEach(module => {
        module.dataset.filiere = filiereId; // Set the filiere ID on each module
        module.addEventListener('dragstart', dragStartHandler);
    });

     // Add event listener for sendDataBtn

    const dropzones = document.querySelectorAll('.module-dropzone');

    dropzones.forEach(dropzone => {
        dropzone.addEventListener('dragover', dragOverHandler);
        dropzone.addEventListener('drop', dropHandler);
    });
});

function dragStartHandler(event) {
    event.dataTransfer.setData("text/html", event.target.outerHTML); // Get the outer HTML of the module div
}

function dragOverHandler(event) {
    event.preventDefault();
}

function dropHandler(event) {
    event.preventDefault();
    const data = event.dataTransfer.getData("text/html");
    const dropzone = event.target;

    // Parse the data to extract the module's details
    const tempDiv = document.createElement('div');
    tempDiv.innerHTML = data;
    const moduleDiv = tempDiv.firstChild;
    const moduleId = moduleDiv.dataset.id;
    const moduleName = moduleDiv.dataset.nom;
    const idFiliere = moduleDiv.dataset.filiere;
    const idSemestre = moduleDiv.dataset.semestre;

    // Extract day and slot from the drop zone ID
    const [day, slot] = dropzone.id.match(/([a-z]+)(\d+)/i).slice(1);

    // Now you have the day, slot, id_module, id_filiere, and id_semestre where the module is dropped
    // You can send this information along with the dragged module name to the server


    dropzone.innerHTML = ''; // Clear existing content
    moduleDiv.classList.remove('btn', 'btn-secondary'); // Remove btn and btn-primary classes
    moduleDiv.classList.add('module-in-schedule');
    dropzone.classList.add('btn-light'); // Add new class for styling
    dropzone.appendChild(moduleDiv); // Append the module div
}
function sendDataToPHP() {
    // Array to store the schedule data
    const scheduleData = [];
    // Retrieve filiereId and semestreId
    const filiereId = document.querySelector('.main-container').dataset.filiereId;
    const semestreId = document.querySelector('.main-container').dataset.semestreId;
    // Loop through each drop zone to collect module names and corresponding day/slot information
    const dropzones = document.querySelectorAll('.module-dropzone');

    dropzones.forEach(dropzone => {
        if (dropzone.firstElementChild) {
            const moduleDiv = dropzone.firstElementChild;
            const moduleId = moduleDiv.dataset.id;
            const moduleName = moduleDiv.dataset.nom;
            const idFiliere = moduleDiv.dataset.filiere;
            const idSemestre = moduleDiv.dataset.semestre;
            const [day, slot] = dropzone.id.match(/([a-z]+)(\d+)/i).slice(1);
            scheduleData.push({
                day: day,
                slot: slot,
                moduleId: moduleId,
                moduleName: moduleName,
                idFiliere: idFiliere,
                idSemestre: idSemestre
            });
        }
    });

    // Check if there is actual data
    if (scheduleData.length > 0) {
        // Log the schedule data for debugging
        console.log(scheduleData);

        // Form the redirection URL using semestreId
        const redirectionURL = `http://localhost/MVC-PROJ/public/afficher_emploi_s${semestreId}`;
        console.log('Redirection URL:', redirectionURL);

        // Send the collected data to the PHP endpoint
        fetch(`../app/controllers/creer_emploi_s${filiereId}.php`, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ schedule: scheduleData }),
        })
        .then(response => {
            // Handle response from server
            console.log(response);
            window.location.href = redirectionURL;
        })
        .catch(error => {
            // Handle errors
            console.error('Error:', error);
        });
    } else {
        document.getElementById('noScheduleMessage').style.display = 'block';
        console.log('No schedule data to send.');
        setTimeout(function() {
            noScheduleMessage.style.display = 'none';
        }, 2500);
    }
}s
