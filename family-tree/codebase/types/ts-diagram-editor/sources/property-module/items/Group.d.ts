import { IEventSystem } from "../../../../ts-common/events";
import { PropertyEvents } from "../types";
export declare class Group {
    private _config;
    constructor(conf: any, _ev: IEventSystem<PropertyEvents>);
    toVDOM(): any;
}
