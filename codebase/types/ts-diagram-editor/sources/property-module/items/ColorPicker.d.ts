import { IEventSystem } from "../../../../ts-common/events";
import { PropertyEvents } from "../types";
import { Text } from "./Text";
export declare class ColorPicker extends Text {
    private _colorPicker;
    private _popup;
    constructor(config: any, ev: IEventSystem<PropertyEvents>);
    toVDOM(): any;
    private _showPopup;
}
