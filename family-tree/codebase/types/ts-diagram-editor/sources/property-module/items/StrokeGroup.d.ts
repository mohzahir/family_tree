import { Text } from "./Text";
export declare class StrokeGroup extends Text {
    private _colorPicker;
    private _popup;
    constructor(config: any, ev: any);
    toVDOM(): any;
    private _showPopup;
}
