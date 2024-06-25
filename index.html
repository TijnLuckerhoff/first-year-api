<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/output.css" rel="stylesheet">
    <title>NASCAR</title>
</head>

<body>
    <header class="p-6 text-white bg-black text-left sm:text-center">
        <h1 class="text-2xl font-bold">NASCAR API</h1>
        <select id="selection" class="text-black">
            <option value="mc/2024/standings/manufacturers">Manufacturers</option>
            <option value="tracks/list">Race Tracks</option>
            <option value="mc/2024/drivers/list">Drivers</option>
            <option value="mc/2024/standings/drivers">Championship Standing</option>
        </select>

        <button id="button" class="text-black bg-white border border-black rounded hover:bg-neutral-300 my-3 py-0.5 px-2.5">Search</button>
    </header>
    <main id="content" class="ml-30 p-6 bg-white"></main>

    <script type="text/javascript">
        // Global variables
        const DOM = document.getElementById("content");
        let data;

        // Loads first request one page load
        window.addEventListener('load', init);

        // Checks for button press
        const btn = document.getElementById("button");
        btn.addEventListener('click', function() { init(); });

        async function init() {
            const cookie = cookieSetter();
            await fetchData();
            displayData(cookie);
        }

        function cookieSetter() {
            // Saves the request for later (specifically when displaying the data)
            const category = document.getElementById("selection").value;
            // Creates cookie for the request
            document.cookie = "testcookie=" + category;
            return category;
        }

        async function fetchData() {
            try {
                const response = await fetch("./controller.php");
                data = await response.json();
                console.log(data);
            } catch (error) {
                console.log(error);
            }
        }

        function displayData(category) {
            DOM.innerHTML = '';
            const individualClassArray = ["border-2", "border-b-0", "border-black"];
            const nameClassArray = ["text-center", "text-2xl", "border-t-0", "border-r-0", "border-l-0", "border-b-0", "border-black"];
            const listClassArray = ["p-3", "hidden"];
            switch (category) {
                case "mc/2024/standings/manufacturers":
                    for (let i = 0; i < data.manufacturers.length; i++) {
                        const manufacturer = data.manufacturers[i];
                        if (i === data.manufacturers.length - 1) { individualClassArray.splice(1, 1) }
                        const individual = createDomElement("article", "", individualClassArray, i + "");
                        // Name of the manufacturer
                        individual.append(createDomElement("h2", manufacturer.name, nameClassArray, i + ".name", true));
                        // Statistics for the manufacturer
                        const list = createDomElement("ul", "", listClassArray, i + ".list");
                        list.append(createDomElement("li", "Wins: " + manufacturer.wins));
                        list.append(createDomElement("li", "Points: " + manufacturer.points));
                        // Append
                        individual.append(list);
                        DOM.append(individual);
                    }
                    
                break;
                case "tracks/list":
                    for (let i = 0; i < data.length; i++) {
                        const row = data[i];
                        if (i === data.length - 1) { individualClassArray.splice(1, 1) }
                        const individual = createDomElement("article", "", individualClassArray, i + "");
                        // Name of the track
                        individual.append(createDomElement("h2", row.name, nameClassArray, i + ".name", true));
                        // Information about the track
                        const list = createDomElement("ul", "", listClassArray, i + ".list");
                        list.append(createDomElement("li", "City: " + row.city));
                        list.append(createDomElement("li", "Place: " + row.state ? row.state + ", " : "" + row.country));
                        list.append(createDomElement("li", "Track Shape: " + row.shape));
                        if (row.shape !== "Road Course") { list.append(createDomElement("li", "Track Type: " + row.surface + ' ' + row.track_type)); }
                        // Append
                        individual.append(list);
                        DOM.append(individual);
                    }
                break;
                case "mc/2024/drivers/list":
                    for (let i = 0; i < data.drivers.length; i++) {
                        const row = data.drivers[i];
                        if (i === data.drivers.length - 1) { individualClassArray.splice(1, 1) }
                        const individual = createDomElement("article", "", individualClassArray, i + "");
                        // Name of the driver
                        individual.append(createDomElement("h2", row.full_name, nameClassArray, i + ".name", true));
                        // Information about the driver
                        const list = createDomElement("ul", "", listClassArray, i + ".list");
                        list.append(createDomElement("li", "Birthplace: " + row.birth_place));
                        list.append(createDomElement("li", "Birthday: " + row.birthday));
                        if (row.hobbies) { list.append(createDomElement("li", "Hobbies: " + row.hobbies)); }
                        if (row.rookie_year) { list.append(createDomElement("li", "Rookie Year: " + row.rookie_year)); }
                        if (row.team) { list.append(createDomElement("li", "Team: " + row.team.name)); }
                        // Cars
                        if (row.cars.length !== 0) {
                            let output = "Cars: ";
                            row.cars.forEach((car) => {
                                output += "" + car.number + ", ";
                            });
                            list.append(createDomElement("li", output));
                        }
                        // Append
                        individual.append(list);
                        DOM.append(individual);
                    }
                break;
                case "mc/2024/standings/drivers":
                    for (let i = 0; i < data.drivers.length; i++) {
                        const row = data.drivers[i];
                        if (i === data.drivers.length - 1) { individualClassArray.splice(1, 1) }
                        const individual = createDomElement("article", "", individualClassArray, i + "");
                        // Name of the driver
                        individual.append(createDomElement("h2", "#" + row.rank + ": " + row.full_name, nameClassArray, i + ".name", true));
                        // Statistics for the driver
                        const list = createDomElement("ul", "", listClassArray, i + ".list");
                        list.append(createDomElement("li", "Average Finish Position: " + row.avg_finish_position));
                        list.append(createDomElement("li", "Points: " + row.points));
                        list.append(createDomElement("li", "Poles: " + row.poles));
                        list.append(createDomElement("li", "Wins: " + row.wins));
                        list.append(createDomElement("li", "Top 5's: " + row.top_5));
                        list.append(createDomElement("li", "Top 10's: " + row.top_10));
                        // Append
                        individual.append(list);
                        DOM.append(individual);
                    }
                break;
                default:
                    console.log("failed to find category");
                break;
            }
        }

        function createDomElement(element, text, tailwindClasses = null, optionalId = null, optionalOnClickEvent = null) {
            // Create the element
            const newElement = document.createElement(element);
            // Put text inside the element
            newElement.innerHTML = text;
            // Set id (optional)
            if (optionalId) { newElement.id = optionalId; }
            // Set classes (optional)
            if (tailwindClasses) { tailwindClasses.forEach((tailwindClass) => { newElement.classList.add(tailwindClass); }); }
            // Set onclick() event (optional)
            if (optionalOnClickEvent) { newElement.setAttribute("onclick","toggleVisibility(this.id);"); }
            return newElement;
        }

        function toggleVisibility(nameId) {
            // Toggle the bottom border of the nameId
            const name = document.getElementById(nameId);
            let flag = true;
            for (let i = 0; i < name.classList.length; i++) {
                if (name.classList[i] === "border-dashed") {
                    name.classList.remove("border-dashed", "border-b-2");
                    flag = false;
                }
            }
            if (flag) { name.classList.add("border-dashed", "border-b-2"); }

            // Toggle the 'hidden' class in the list of the nameId
            const listId = nameId.substring(0, nameId.indexOf(".")) + ".list";
            const list = document.getElementById(listId);
            flag = true;
            for (let i = 0; i < list.classList.length; i++) {
                if (list.classList[i] === "hidden") {
                    list.classList.remove("hidden");
                    flag = false;
                }
            }
            if (flag) { list.classList.add("hidden"); }
        }
    </script>
</body>
</html>