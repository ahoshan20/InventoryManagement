import Swal from "sweetalert2";

window.showAlert = (type, messege) => {
	Swal.fire({
		icon: type,
		title: type.charAt(0).toUpperCase() + type.slice(1),
		text: messege, 
		timer: 3000,
		showConfirmButton: false,
	})
}

window.confirmationAlert = (callback) => {
	Swal.fire({
		title: "Are you sure?",
		text: "You won't be able to revert this!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#d33",
		cancelButtonColor: "#3085d6",
		confirmButtonText: "Yes, delete it!", 
	}).then((result) => {
		if (result.isConfirmed) {
			callback();
		}
	})
}