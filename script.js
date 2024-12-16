function updateMessages() {
    const presetValue = document.getElementById("preset").value;
    const serverMessages = document.querySelectorAll(".server-message textarea");

    let presetMessage = "";
    if (presetValue === "Preset 1") {
        presetMessage = "Preset 1: This message will be sent in xx minutes.";
    } else if (presetValue === "Preset 2") {
        presetMessage = "Preset 2: This message will be sent in yy minutes.";
    } else if (presetValue === "Preset 3") {
        presetMessage = "Preset 3: This message will be sent in zz minutes.";
    }

    serverMessages.forEach((textarea) => {
        textarea.value = presetMessage;
    });
}
