import { IEventSystem } from "../../../../ts-common/events";
import { PropertyEvents } from "../types";
export declare class Text {
    protected _uid: string;
    protected _config: any;
    protected _evs: IEventSystem<PropertyEvents>;
    protected _handlers: any;
    constructor(config: any, ev: IEventSystem<PropertyEvents>);
    setValue(value: any, silent?: boolean): void;
    getValue(): any;
    clear(): void;
    toVDOM(view: any): any;
    protected _changed(e: any): void;
}
