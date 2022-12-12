// import axios from "axios";

// const message_form = document.getElementById("message_form");
// const message_input = document.getElementById("message_input");
// const conversation = document.getElementById("conversation");
// const user = document.getElementById("user_id");

// message_form.addEventListener("submit", function (e) {
//     e.preventDefault();

//     const options = {
//         method: "post",
//         url: `/send-message/${user.value}`,
//         data: {
//             message: message_input.value,
//             conversation_id: conversation.value,
//         },
//     };

//     axios(options);
// });

// window.Echo.channel(`conversation-${conversation.value}`).listen(".message");
