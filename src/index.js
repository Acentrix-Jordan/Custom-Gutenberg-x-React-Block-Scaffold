import { registerBlockType } from "@wordpress/blocks";
import { CustomBlockFrontend } from "./layouts/frontend";
import { CustomBlockBackend } from "./layouts/editor";

registerBlockType("custom-block-plugin/custom-block", {
	title: "Custom Block", // Block Name
	icon: "smiley", // Dashicon or SVG Element
	category: "common", // Block Category
	description: "", // Block Description
	attributes: {}, // Block Attributes
	edit: () => <CustomBlockBackend />, //Editor Screen
	save: () => <CustomBlockFrontend />, // Front End Screen
});
