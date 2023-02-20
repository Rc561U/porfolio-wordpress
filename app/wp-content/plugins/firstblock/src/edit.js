import {useBlockProps} from "@wordpress/block-editor";

export default function edit() {
    const blockProps = useBlockProps()
    return <p {...blockProps}>Edit jsx from separate files</p>
}