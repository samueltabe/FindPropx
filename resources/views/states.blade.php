<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="row my-5">
        <div class="col-md-12">
            <h1>Api Learning</h1>
            <select id="stateSelect">
                @foreach ($state as $st )
                <option value="#"></option>
                <option value="{{ $st->id }}">{{ $st->name }}</option>
                @endforeach
            </select>
            <select id="localGovernmentsSelect">
                @foreach ($state as $st )
                <option value="#"></option>
                <option value="">{{ $st->localGovernments->local_name }}</option>
                @endforeach
            </select>
        </div>
    </div>

<script>
        // Get references to the select elements
const stateSelect = document.getElementById("stateSelect");
const localGovernmentsSelect = document.getElementById("localGovernmentsSelect");

// Add an event listener to the state select element
stateSelect.addEventListener("change", fetchlocalGovernments);

// Function to fetch the capital based on the selected state
function fetchlocalGovernments() {
  // Get the selected state value
  const selectedState = stateSelect.value;

  // Make sure a state is selected
  if (selectedState !== "") {
    // Make the API request to fetch the capital
    fetchlocalGovernmentsData(selectedState)
      .then((localGovernments) => {
        // Update the capital select options
        updatelocalGovernmentsOptions(localGovernments);
      })
      .catch((error) => {
        console.log(error);
      });
  } else {
    // Clear the capital select options if no state is selected
    localGovernmentsSelect.innerHTML = '<option value="">Select a localGovernments</option>';
  }
}

function fetchlocalGovernmentsData(state) {
  // Replace 'YOUR_API_URL' with the actual URL of your API
  const apiUrl = `http://127.0.0.1:8000/api/state`;

  // Make the API request using fetch
  return fetch(apiUrl)
    .then((response) => {
      if (!response.ok) {
        throw new Error("Failed to fetch localGovernments data");
      }
      return response.json();
      console.log(response);
    })
    .then((data) => {
      // Extract the capital from the response data
      const localGovernments = data.localGovernments;

      // Return the capital
      return localGovernments;
    });
}

function updatelocalGovernmentsOptions(localGovernments) {
  // Clear the previous options
  localGovernmentsSelect.innerHTML = "";

  // Create a new option element for the capital
  const option = document.createElement("option");
  option.value = localGovernments;
  option.textContent = localGovernments;

  // Add the option to the capital select element
  localGovernmentsSelect.appendChild(option);
}

</script>
</body>
</html>
