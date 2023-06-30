import { useBlockProps } from "@wordpress/block-editor";

// Styles
import "../assets/backend.scss";

export const CustomBlockBackend = (props) => {
	return (
		<div {...useBlockProps()}>
			<h2>Editor Screen</h2>
			<p>Hello, Gutenberg!</p>
		</div>
	);
};
