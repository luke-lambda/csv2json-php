
function csv2json() {
    let csv = document.querySelector('textarea.form-control#inputCSV').value;
    let lineCSV = csv.split("\n");
    let headCSV = lineCSV[0].split(',');
    let lineJSON = [];
    let elementCSV = null;

    let obj = {};

    for (let i = 1; i < lineCSV.length; i++) {
        obj = {};
        elementCSV = lineCSV[i].split(',');

        for(let j = 0; j < headCSV.length; j++) {
            obj[headCSV[j]] = elementCSV[j];
        }

        lineJSON.push(obj);
    }

    document.querySelector('textarea.form-control#inputJSON').value = JSON.stringify(lineJSON);
    document.querySelector('span#labelInputJSON').classList.add("bg-success");
    document.querySelector('span#labelInputJSON').classList.add("text-white");
    document.querySelector('textarea.form-control#inputJSON').classList.add("bg-dark");
    document.querySelector('textarea.form-control#inputJSON').classList.add("text-light");
}
